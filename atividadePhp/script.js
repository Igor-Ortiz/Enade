document.getElementById("windows-button").addEventListener("click", function() {

    var windowsDownloadUrl = "https://example.com/download/windows.exe";

    var downloadLink = document.createElement("a");
    downloadLink.href = windowsDownloadUrl;
    downloadLink.download = "software-windows.exe"; 
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
});

document.getElementById("mac-button").addEventListener("click", function() {
  
    var macDownloadUrl = "https://example.com/download/mac.dmg";
    var downloadLink = document.createElement("a");
    downloadLink.href = macDownloadUrl;
    downloadLink.download = "software-mac.dmg";
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
});

document.getElementById("linux-button").addEventListener("click", function() {
    
    var linuxDownloadUrl = "https://example.com/download/linux.tar.gz";
    var downloadLink = document.createElement("a");
    downloadLink.href = linuxDownloadUrl;
    downloadLink.download = "software-linux.tar.gz";
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
});
