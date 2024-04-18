
# Verziókezelés
## Helyi repo létrehozása
    
- inicializálás:
    > git init
- ellenőrzés:
    > git status   
- előkészítjuk commit-re (eltárolni):
    > git add .
- ellenőrzés:
    > git status
- helyi gépen ellenőrizzük le: username és email:
    > git config user.name

    > git config user.email    
- eltároljuk mint egy új verzió:
    > git commit -m "first commit"                 
## Összekapcsolás a távoli repoval

- GitHub repo létrehozása
- összekapcsolási parancs: 
    >   git remote add origin https://token@github.com/aaronzsolt/mymusic.git
- meg kell mondani a legelső alkalommal, hogy melyik ágat használjuk és feltesszük a legújabb verziónkat:
    > git push -u origin master

- további verziók esetén:
    > git push        