module.exports = {
  "parser": "babel-eslint",
  "env": {
    "node": true,
    "es6": true
  },
   "extends": "eslint:recommended",
   "parserOptions": {
     "ecmaVersion": 6,
     "sourceType": "module",
     "ecmaFeatures": {
         "jsx": true
     }
 },
  "rules": {
    "strict" : 0,
    "no-console": "off",
    "no-undef": "off",
    "no-alert": "off",
    "indent": [
      "error",
      2
    ],
    "linebreak-style": [
      "error",
      "unix"
    ],
    "quotes": [
      "error",
      "single"
    ],
    "semi": [
      "error",
      "always"
    ]
  }
};
