const logger = require("./logger");
const path = require("path");
const os = require("os");
const fs = require("fs");

logger.log("message");

var pathObj =  path.parse(__filename);
console.log(pathObj);

var totalMemory = os.totalmem();
var freeMemory = os.freemem();

//console.log("Total Memory:" + totalMemory);

//Template string
//ES6 /ES2015 : ECMAScript 6

console.log(`Total Memory: ${totalMemory}`);
console.log(`Free Memory: ${freeMemory}`);
