<h1>Thanks for joining {{ $user->name }}</h1>
<p><strong>Install Visual Studio Code</strong></p>
<p>
    sudo apt update && sudo apt upgrade -y<br>
    sudo apt install software-properties-common apt-transport-https wget -y<br>
    wget -O- https://packages.microsoft.com/keys/microsoft.asc | sudo gpg --dearmor | sudo tee /usr/share/keyrings/vscode.gpg<br>
    echo deb [arch=amd64 signed-by=/usr/share/keyrings/vscode.gpg] https://packages.microsoft.com/repos/vscode stable main | sudo tee /etc/apt/sources.list.d/vscode.list<br>
    sudo apt update<br>
    sudo apt install code<br>
    code
</p>
