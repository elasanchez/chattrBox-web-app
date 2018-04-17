module.exports = {
  "env": {
    "node": true,
    "browser": true
  },
  "extends": "eslint:recommended",
  //"parser": "babel-eslint",
  "rules": {
    "no-console": "off",
    "no-undef": "error",
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
