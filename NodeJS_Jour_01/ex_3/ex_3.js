fs = require('fs');

if(process.argv[2] == null)
{
    return console.log('Error: Critical failure');
}
else {
    file1 = process.argv[2];
    file2 = process.argv[3];

    fs.readFile(file1, 'utf8', function(err, data) {
        if (!err)
        {
            fs.open(file2, "w", function(err){
                if (!err)
                {
                    fs.writeFile(file2, data.toString(), function(err) {
                        if(err) {
                            return console.log('Error: Critical failure');
                        }
                    });
                }
                else {
                    return console.log('Error: Critical failure');
                }
            });
        }
        else
        {
            return console.log('Error: Critical failure');
        }
    });
}
