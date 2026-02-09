<?php
$file=fopen("TEXT.txt","r");
$content=fread($file,filesize("TEXT.txt"));
echo $content;
fclose($file);
 echo '<br>';
readfile("TEXT.txt");
echo'<br>';
echo file_get_contents("TEXT.txt");
 echo '<br>';
$file=fopen("TEXT.txt","w");
$data=file_get_contents("./uploads/Customer Purchasing Behaviors.csv");
$rewrite=fwrite($file,$data);
echo file_put_contents("TEXT.txt","Babu lake babu Kalyan Babu.");
 echo '<br>';
 echo file_get_contents("TEXT.txt");

 $lines=file("TEXT.txt");
 foreach($lines as $line){
    echo $line.'<br>';
 }
if(file_exists("TEXT.txt")){
    echo "File exists.";
}
else{
    echo "File does not exist.";
}
echo '<br>';
echo filetype("./Media/rcb.png");
echo '<br>';
echo date("d-m-Y H:i:s",filemtime("TEXT.txt"));
echo '<br>';
echo date("d-m-Y H:i:s",filemtime("./Media/rcb.png"));
echo '<br>';
echo date("d-m-Y H:i:s",filectime("TEXT.txt"));
echo '<br>';
echo fileperms("TEXT.txt");
echo substr(sprintf('%o', fileperms("TEXT.txt")), -4);
echo '<br>';
echo  fileowner("./Media/rcb.png");
echo '<br>';
echo filegroup("TEXT.txt");
echo '<br>';
echo fileinode("TEXT.txt");
echo '<br>';
copy("TEXT.txt","COPY.txt");
rename("COPY.txt","RENAMED.txt");
unlink("RENAMED.txt");
mkdir("myfolder");
rmdir("myfolder");

if (is_file("TEXT.txt")) {
    echo "It is a file";
}

echo '<br>';


mkdir("MyFolder");
if (is_dir("MyFolder")) {
    echo "It is a directory";
}
else echo "It is not a directory";

$files = scandir(".");
print_r($files);

$dir = opendir("uploads");
 echo $dir;

while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);

echo getcwd();
echo '<br>';
chdir("MyFolder");
echo getcwd();


 $file = fopen("Data.txt", "w");
$data = "My name is Billa B for Billa okade sainyam la Vacchanilla";

if (flock($file, LOCK_EX)) {
    fwrite($file, $data);
    flock($file, LOCK_UN);
}

fclose($file);

readfile("Data.txt");



?>
