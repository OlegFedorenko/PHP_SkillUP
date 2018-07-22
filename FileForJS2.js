"use strict";
let massive = [2, 3, 4, 5, 6, 4, 77, 32, 4];

for (let i = 0; i < massive.length; i++)
{
    if (massive[i] > 5)
    {
        document.write([i] + ' --- ' + massive[i] + '<br>');
    }
}
