const LOCALE = "de";
var fs = require("fs");
var util = require("util");
var Gettext = require("node-gettext");
var gt = new Gettext();
var fileContents = fs.readFileSync(`./locale/${LOCALE}/LC_MESSAGES/messages.mo`);
gt.addTextdomain(LOCALE, fileContents);

console.log(gt.gettext("How are you?"));
console.log(gt.gettext("Hello world"));
console.log(util.format(gt.ngettext("%d car", "%d cars", 10), 10));