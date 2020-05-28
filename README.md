# Repro of issue #159 with Slim-Psr7
https://github.com/slimphp/Slim-Psr7/issues/159

## Getting started
Run this sample with:
```
php -S localhost:3000
```

Then execute this command to upload a file (or just use Postman to PUT a binary file to that address).
```
curl -T "README.md" "http://localhost:3000/upload"
```

On Windows, you can use PowerShell
```
Invoke-RestMethod -Uri "http://localhost:3000/upload" -Method Put -InFile "README.md"
```

You'll see a message like this:
    
    Content-Length was: 1111, Body size was: null

Body size should not be `null` but it should be equal to `Content-Length`.