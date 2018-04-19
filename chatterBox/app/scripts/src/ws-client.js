/* Responsibilities
- connectingto server
- perform init setupt on connection
- forward incomming messages to DOM
- send outgoing msg to server*/
var WebSocket = require('ws');
let socket;

//Connects to the WebSocket server
function init(url) {
  socket = new WebSocket(url);
  console.log('connecting...');
}

function registerOpenHandler(handlerFunction) {
  //Arrow function == anonymous function
  socket.onopen = () => {
    console.log('open');
    handlerFunction();
  };
}

// Receives object from server
function registerMessageHandler(handlerFunction) {
  socket.onmessage = (event) => {
    console.log('message', event.data);
    let data = JSON.parse(event.data);
    handlerFunction(data);
  };
}
// send message to WebSocket
function sendMessage(payload) {
  socket.send(JSON.stringify(payload));
}

export default {
  init, // enhanced object literl syntax => {init:init}
  registerOpenHandler,
  registerMessageHandler,
  sendMessage
};
