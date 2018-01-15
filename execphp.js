/**
 *
 */
class ExecPHP {
	/**
	 *
	 */
	constructor() {
		this.phpPath = '/usr/local/bin/php';
		this.phpFolder = 'phpfiles';
	}
	/**
	 *
	 */
	parseFile(fileName,callback) {
		var realFileName = fileName.substring(1);

		console.log('parsing file: ' + realFileName);

		var exec = require('child_process').exec;
		var cmd = this.phpPath + ' ' + this.phpFolder + '/index.php ' + realFileName;

		exec(cmd, function(error, stdout, stderr) {
			callback(stdout);
		});
	}
}
module.exports = function() {
	return new ExecPHP();
};
