fs = require('fs');
dir = './garbage';

if (fs.existsSync(dir))
{
    var files = fs.readdirSync(dir);
}

try {
    if (!fs.existsSync(dir))                                                    // IF GARBAGE DOESNT EXIST
    {
        fs.mkdirSync(dir);                                                      // MAKE GARBAGE DIR
        process.argv.forEach((val) => {
            if (!isNaN(val))
            {
                for(var i = 1; i <= val; i++)                                   // LOOP UNTIL i = val
                {
                    console.log(`Created file ${i}`);
                    fs.openSync(`${dir}/${i}`, 'w');                            // CREATE EMPTY FILES
                }
            }
        });
    }
    else if ((fs.existsSync(dir)) && (files.length != 0))
    {
        files.forEach((files) => {
            fs.unlinkSync(`${dir}/${files}`);
        });
    }
    else if ((fs.existsSync(dir)) && (files.length == 0))
    {
        process.argv.forEach((val) => {
            if (!isNaN(val))
            {
                for(var i = 1; i <= val; i++)                                   // LOOP UNTIL i = val
                {
                    console.log(`Created file ${i}`);
                    fs.openSync(`${dir}/${i}`, 'w');                            // CREATE EMPTY FILES
                }
            }
        });
    }
}
catch (e) {
    console.log('Error: Critical failure');
}
finally {
    console.log('Done');
}
