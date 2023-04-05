# subcategories-files


# To move files that have the same prefix to a sub-folder with the same name

This code uses the scandir() function to get all files in the directory, and then loops through each file. It checks if the file is a file (not a directory), gets the prefix of the file by using the substr() and strpos() functions, and then creates the sub-directory path using the prefix. If the sub-directory does not exist, it creates the sub-directory using the mkdir() function. Finally, it moves the file to the sub-directory using the rename() function.

To avoid loading all files at once, we use scandir() function to retrieve a list of all files in the directory, then process each file individually in the loop. This approach is more efficient than loading all files into memory at once.

We also use meaningful variable names to improve the readability of the code, and we make sure to add comments to explain each section of the code. Finally, we make sure to handle errors gracefully, and to use appropriate error handling mechanisms to ensure the code is maintainable.
## - By PHP
## Installation

Use the package manager [brew](https://formulae.brew.sh/formula/php) to install php.




# Steps to run script :

```bash
cd subcategories-files/
```

```bash
php index.php
```

## - By Shell Script

```bash
cd subcategories-files/
```

```bash
chmod +x shellScript.sh
```
```bash
./shellScript.sh
```


* after running the script the files appears like executed files folder