// importing socket
import socket from './ws-client';
// importing a named import
import {ChatForm/*class*/ , ChatList/*class*/, promptForUsername /*function*/} from './dom';
import {UserStore} from './storage';

const FORM_SELECTOR = '[data-chat="chat-form"]';
const INPUT_SELECTOR = '[data-chat="message-input"]';
const LIST_SELECTOR = '[data-chat="message-list"]';
// chatterbox instead of chattrbox
// x-chatterbox/u is an unique id for UserStore instance, which is sessionStorae id effectively

let userStore = new UserStore('x-chatterbox/u');
// get user stored in userStore
let username = userStore.get();
if(!username) { // if its empty, undefined.
  username = promptForUsername(); // promt user again
  userStore.set(username);
}

class ChatApp {
  constructor() {

    this.chatForm = new ChatForm(FORM_SELECTOR, INPUT_SELECTOR);
    this.chatList = new ChatList(LIST_SELECTOR, username);
    // console.log('Hello ES6');
    socket.init('ws://localhost:3001');

    // On open, send a dummy message
    socket.registerOpenHandler(() => {
      this.chatForm.init((data) => {
        let message = new ChatMessage({message : data});
        socket.sendMessage(message.serialize());
      });
      this.chatList.init();
    });

    // On message received, pass fn that logs data received
    socket.registerMessageHandler((data) => {
      console.log(data);
      let message = new ChatMessage(data);
      this.chatList.drawMessage(message.serialize());
    })
  }
}
//This ChatMsg class represent individual chat messages
class ChatMessage {

  // Param: object
  // Optional: user and timestamp
  constructor({
    message: m,
    user: u = username,
    timestamp: t = (new Date()).getTime()
  }) {
    this.message = m;
    this.user = u;
    this.timestamp = t;
  }

  //Seriaslize to represent JavaScript object
  serialize() {

    //return important data as a JSON
    return {
      user: this.user,
      message: this.message,
      timestamp: this.timestamp
    };
  }
}
export default ChatApp;
