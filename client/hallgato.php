<style>
    .lyrics{
        font-size: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        display: inline-block;
        padding: 25px;
        border-radius: 25px;
    }

    .refren{
        font-style: italic;
    }

    #video:hover{
      box-shadow: 0px 0px 25px 10px #DC143C;
    }

    iframe{
      border-radius: 25px;
    }

    @media only screen and (max-width: 900px) {
      iframe{
        width: 725px;
        height: 408px;
      }
    }

    @media only screen and (max-width: 800px) {
      iframe{
        width: 625px;
        height: 352px;
      }
    }

    @media only screen and (max-width: 700px) {
      iframe{
        width: 525px;
        height: 295px;
      }
    }

    @media only screen and (max-width: 600px) {
      iframe{
        width: 425px;
        height: 239px;
      }
    }

    @media only screen and (max-width: 500px) {
      iframe{
        width: 325px;
        height: 183px;
      }
    }
</style>

<div class="text-center">

<div id="youtubePlayer"></div>

<script>
  getData("../server/hallgato.php", renderMusic) 
  function renderMusic(data){
    console.log(data);
    for(let obj of data){
      console.log(obj.link, obj.cim);
      document.getElementById('youtubePlayer').innerHTML += `
      <a name="${obj.id}"></a>
      <div class="d-flex flex-column justify-content-center p-0 m-3">
        <div style="scroll-margin-top: 150px;" id="${obj.id}" class="p-0 m-3 kartya">
          <iframe width="800" height="450" src="https://www.youtube.com/embed/${obj.link}" 
            frameborder="0" allowfullscreen id="video" class="link"></iframe>
        </div>
        <h2>${obj.cim}</h2>`;
        if(obj.id == 1) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div class="refren">
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
            </div>
            <br>
            <div>
              Megérkeztem közétek mindenkit helyre teszek<br>
              Azon vagyok mindent a saját zenémbe bele tegyek<br>
              Ha befutok egyszer akkor néznek majd a szemek<br>
              Csak azért kezdtem el mivel felbaszott egy hülye gyerek<br>
              1v1-ben gyere tesó tuti hogy én nyerek<br>
              Nekem nem kell árnyékolni hogy valaki legyek<br>
              Ne felejtsük el hogy a történet hogyan kerek<br>
              Hiszen te egy lányt is megütöttél esküszöm csak lesek<br>
              Könnyű mondani utólag hoppá bocsika<br>
              Legközelebb ha árnyékolsz legyen logika<br>
              Sosem veszed észre magad kéne optika<br>
              Na álljunk meg kicsit, hol van a Zsoltika<br>
              Itt vagyok Fazekas testvérem köszönöm<br>
              Hogy támogatsz engem és nem egyedül sörözöm<br>
              Sajnos én a hülyével még néha ütközöm<br>
              Mondd meg neki bekaphatja és hogy üdvözlöm<br>
            </div>
            <br>
            <div class="refren">
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
            </div>
            <br>
            <div>
              Könnyen adod magad mindenféle kiscsaj átver<br>
              Jól van áldásomat adom rátok kimondom az áment<br>
              Az exed is csak hazudott és sok mindre rávett<br>
              Azt mondta nincs rend a szobájában mégis hozzád átment<br>
              De aztán tovább ment, hisz le se tudna szopni<br>
              Szűkülettel a helyedben nem is mernék szólni<br>
              Gondolkozz el rajta lehet jobban kéne mosni<br>
              Mivel néhány hónap után téged mindig szoktak dobni<br>
              Te vagy az aki magát folyton részegre itta<br>
              Faszért csodálkozol hogyha nem köszönnek vissza<br>
              Minden ember rájön veled valami nem tiszta<br>
              Ezért fura hogy a csajod még a szavaidat issza<br>
              És mindenkinek rólad ugyanaz a véleménye<br>
              Csak kevés olyan őszinte van mint a magamféle<br>
              Sokszor égettél le sajnos minket visszanézve<br>
              Szóval betelt már a pohár számunkra most itt a vége<br>
            </div>
            <br>
            <div class="refren">
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
            </div>
            <br>
            <div>
              Nem fogom elfelejteni velem együtt dolgoztál<br>
              Mi esküszöm hogy bírtunk téged csak sajnos megváltoztál<br>
              Gondolkozz el azon másoknak te miket okoztál<br>
              És azt még egyszer kiemelném csajokat árnyékoltál<br>
              De mielőtt zokognál, magad miatt fájjon<br>
              Hisz ami az én szívemen az ugyanúgy a számon<br>
              Nem fontos hogy kijöjjön a dicséret a szádon<br>
              Én is tudom köszi üt a szavam úgymint a Mike Tyson<br>
              Ja és megszólod amikor viselem a Niket<br>
              Sosem vágtam fel semmivel megkérdezhetsz bárkit<br>
              Ki a faszom mondta neked könnyen veszek bármit<br>
              Ne hidd azt hogy egyfolytában szarom a rengeteg gázsit<br>
              Arra büszke neki van és nekem nincsen csajom<br>
              Attól még az édesanyját ugyanúgy megbaszom<br>
              Nem érek rá szórakozni van épp elég bajom<br>
              Inkább egyedül fekszek az ágyon folytatom a dalom<br>
            </div>
            <br>
            <div class="refren">
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
              Leszarom meg se nézem azt melyik hülye csörög<br>
              Mindig én vagyok a rossz, én vagyok a köcsög<br>
              Mert az őszinteség elől soha el nem szökök<br>
              Majd kiderül a végén, melyikünk röhög<br>
            </div>
          </div>`;
        }
        if(obj.id == 2) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div class="refren">
              Rengeteg terv, hosszú az út<br>
              Tarts velem tudd meg hogy milyen a csúcs<br>
              Lemezeken, folyton lesz új<br>
              Valami amit a szívem átnyújt<br>
              Rengeteg terv, hosszú az út<br>
              Tarts velem tudd meg hogy milyen a csúcs<br>
              Lemezeken, folyton lesz új<br>
              Valami amit a szívem átnyújt<br>
            </div>
            <br>
            <div>
              Kezdődik a napom felhívom a spanom<br>
              Hisz amilyen beateket készít azt adom<br>
              Bekapod a faszom ez nem irodalom<br>
              A szövegeket mindig jól odabaszom<br>
              (Yeah) Kitartás tehetség kell<br>
              Csak sokan nem fogják fel ezt ésszel<br>
              Dolgozok van hogy fent vagyok éjjel<br>
              Miközben te sorozatot nézel<br>  
              Én mindig is tudtam és éreztem<br>
              Van ehhez az egészhez érzékem<br>
              Azt leszarom hogy befutok vagy nem<br>
              A zene folyton itt lesz mellettem<br>
              Lehet ezt hallgatva nagy a pofád<br>
              Ne oktass ki amatőr az anyád<br>
              Úgyse tudnál jobbat jól van csináld<br>
              Akkor kezd el hogyha van is témád<br>
              Mielőtt leírnád a kommentedet<br>
              Magamnak írom a zenét nem neked<br>
              Vannak még sebek és vannak szar hetek<br>
              De már egy pár éve felfele megyek<br>
              Ki tudja mikor lesz az első feat<br>
              Kell a faszomnak aki lelassít<br>
              Pörög a beat, Złoty hasít<br>
              Szövegemmel egyikőtök se bír<br>
            </div>
            <br>
            <div class="refren">
              Rengeteg terv, hosszú az út<br>
              Tarts velem tudd meg hogy milyen a csúcs<br>
              Lemezeken, folyton lesz új<br>
              Valami amit a szívem átnyújt<br>
              Rengeteg terv, hosszú az út<br>
              Tarts velem tudd meg hogy milyen a csúcs<br>
              Lemezeken, folyton lesz új<br>
              Valami amit a szívem átnyújt<br>
            </div>
            <br>
            <div>
              Annyira bírom hogy sokan akarják<br>
              Nekem megmondani mit hogyan csináljak<br>
              Ezúton is szeretném üzenni nekik<br>
              Azt várhatják majd én a sorba álljak<br>
              A döntéseimet nem értitek<br>
              Nőjetek fel nem kell a hisztitek<br>
              Kurvára nem ismertek de azt hiszitek<br>
              Mindig mutatok újat és csak nézitek<br>
              (Hah) Amiket látok az cringe<br>
              Csajozni van esze dolgozni nincs<br>
              Azt várja egyszer felbukkan a kincs<br>
              Hiszen ásó a kezében sosincs<br>
              De a lábadon, mi az egy Jordan<br>
              Megdolgoztál érte fogadom hogy nem<br>
              És te még kérkedsz is vele no komment<br>
              Üdvözlöm anyádat biztos nagyot ment<br>
              (Dik) Már megint egy csaj<br>
              Egyik se igazi az a nagy baj<br>
              Sok errefelé a pénzéhes faj<br>
              Maradok egyedül maradok raj<br>
              Persze ha offolom már egyből sír<br>
              Mögöttem van egy pár szomorú szív<br>
              Egy ideig élveztem de kikészít<br>
              Hogy mikor lesz valaki aki csábít<br>
            </div>
            <br>
            <div class="refren">
              Rengeteg terv, hosszú az út<br>
              Tarts velem tudd meg hogy milyen a csúcs<br>
              Lemezeken, folyton lesz új<br>
              Valami amit a szívem átnyújt<br>
              Rengeteg terv, hosszú az út<br>
              Tarts velem tudd meg hogy milyen a csúcs<br>
              Lemezeken, folyton lesz új<br>
              Valami amit a szívem átnyújt<br>
            </div>
          </div>`;
        }
        if(obj.id == 3) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div class="refren">
              Beülök a kocsiba és keresem a helyemet<br>
              Keresem azt akivel igazán boldog lehetek<br>
              Megesik hogy megbántom akiket közben szeretek<br>
              Nem tudom meddig bírom ki még ezt a szerepet<br>
              Beülök a kocsiba és keresem a helyemet<br>
              Keresem azt akivel igazán boldog lehetek<br>
              Megesik hogy megbántom akiket közben szeretek<br>
              Nem tudom meddig bírom ki még ezt a szerepet<br>
            </div>
            <br>
            <div>
              Egyik este se ugyanolyan mint a pénteki<br>
              Eddig szórakozni mentem de most felejteni<br>
              Nincsen tökéletes lány ezt nehéz megérteni<br>
              Bízok benne hogy a viszki fog majd segíteni<br>
              Bezzeg másnap, csak fekszek az ágyban<br>
              Megdöglök egyedül ebben a magányban<br>
              Nem tudom van-e olyan aki hibátlan<br>
              Nem tudom hol keressem a nagy világban<br>
              Ez lettem, zenébe menekültem<br>
              Mikor jött egy másik lány én azt is elküldtem<br>
              Ütemről ütem, ez lett az életem<br>
              Hol van az igazi azt még mindig keresem<br>
              Lehet nagy az elvárásom elfogadom<br>
              Várok még és a szívemet zenékben hagyom<br>
              Bárki megkérdezi, hogy mi a bajom<br>
              Egyből mondom nincs bajom persze csak tagadom<br>
            </div>
            <br>
            <div class="refren">
              Beülök a kocsiba és keresem a helyemet<br>
              Keresem azt akivel igazán boldog lehetek<br>
              Megesik hogy megbántom akiket közben szeretek<br>
              Nem tudom meddig bírom ki még ezt a szerepet<br>
              Beülök a kocsiba és keresem a helyemet<br>
              Keresem azt akivel igazán boldog lehetek<br>
              Megesik hogy megbántom akiket közben szeretek<br>
              Nem tudom meddig bírom ki még ezt a szerepet<br>
            </div>
            <br>
            <div>
              Hogyha segíteni szeretnél kösz de nem kell<br>
              Ez az én problémám és nekem küzdenem kell<br>
              Semmit nem fogok kezdeni kisgyerekekkel<br>
              Ezt a szart is kibírom majd a szövegekkel<br>
              Hisz manapság ugye sokan leadják a szintet<br>
              Csak ne egyedül kelljen otthon nézni a Netflixet<br>
              Még külseje sincsen, mivel nekik mindegy<br>
              Hidd el nem vagyok rád irigy csinálok tracklistet<br>
              Nem vagy értékesebb hogyha nagynak hiszed magad<br>
              Mert mindig van új kapcsolatod pár hónap alatt<br>
              Én nem szólok bele, csak hallgasd meg a szavam<br>
              Lesz-e majd olyan aki végig veled marad?<br>
              Złoty már megint, egy új arcot mutatott<br>
              Most is ahogy szokott a szívére hallgatott<br>
              Minden egyes éjszaka, jönnek gondolatok<br>
              Akkor teszem le a mikrofont ha azt akarom<br>
            </div>
            <br>
            <div class="refren">
              Beülök a kocsiba és keresem a helyemet<br>
              Keresem azt akivel igazán boldog lehetek<br>
              Megesik hogy megbántom akiket közben szeretek<br>
              Nem tudom meddig bírom ki még ezt a szerepet<br>
              Beülök a kocsiba és keresem a helyemet<br>
              Keresem azt akivel igazán boldog lehetek<br>
              Megesik hogy megbántom akiket közben szeretek<br>
              Nem tudom meddig bírom ki még ezt a szerepet<br>
            </div>
          </div>`;
        }
        if(obj.id == 4) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div class="refren">
              Ez vagyok<br>
              Egy srác aki mindig újabb határokat feszeget<br>
              Befarol<br>
              Közétek a kihívó az nem kérdés hogy merem-e<br>
              Lehagyom<br>
              Azokat akik több ideje csinálják keszegek<br>
              Megadom a csalit egyetek<br>
              Ez az én horgász terepem<br>
            </div>
            <br>
            <div>
              Kimegyek a tóra, viszem a flowmat<br>
              Megnézem hányan akadnak kampóra<br>
              Mindegy mi a módja, jobbnál jobb nóta<br>
              Mások is jönnének fel a mólóra<br>
              Szemtelenek<br>
              Versekkel szórakoztattam embereket<br>
              Vágom mi a szakma menete<br>
              Ezek próbálkoznak nehezen<br>
              Megosztó rapperek a piacon<br>
              Ilyen az én divatom<br>
              Kibaszom a szemeteket<br>
              Fejből tudják már a szövegemet<br>
              Mert, hiába keresed nincs elvi hiba<br>
              Klippen kívül is jól nézek ki cica<br>
              Mi tetszik jobban én vagy a ritmika<br>
              Nekem nem kell akármilyen kis…<br>
            </div>
            <br>
            <div class="refren">
              Ez vagyok<br>
              Egy srác aki mindig újabb határokat feszeget<br>
              Befarol<br>
              Közétek a kihívó az nem kérdés hogy merem-e<br>
              Lehagyom<br>
              Azokat akik több ideje csinálják keszegek<br>
              Megadom a csalit egyetek<br>
              Ez az én horgász terepem<br>
            </div>
            <br>
            <div>
              Azt mondják várják a kövit folytatom a melót<br>
              Nem sejtik hogy van nálam demó<br>
              Rajta van a telón<br>
              Érdekes a tiédet nem várják tesó<br>
              Nem hangoztatom a dalomat<br>
              Te mégis megosztod a szarodat<br>
              Büszke vagy hetente adod ki azokat<br>
              Nem érted azt aki baszogat<br>
              Vajon mire gondolt most a költő elemezzétek<br>
              Mindegyik zenémben meghagyom<br>
              Találgassanak csak amikről beszélek<br>
              Várom a beefet, vágod a címet
              Ne rakd effektekkel teli a beatet<br>
              Ki kell érdemelni a featet<br>
              Ki kell érdemelni a featet<br>
            </div>
            <br>
            <div class="refren">
              Ez vagyok<br>
              Egy srác aki mindig újabb határokat feszeget<br>
              Befarol<br>
              Közétek a kihívó az nem kérdés hogy merem-e<br>
              Lehagyom<br>
              Azokat akik több ideje csinálják keszegek<br>
              Megadom a csalit egyetek<br>
              Ez az én horgász terepem<br>
            </div>
          </div>`;
        }
        if(obj.id == 5) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div>
              Bizonyítana most ez a gyerek<br>
              Verzéket ír úgy mint egy SMS-t<br>
              Pedig random esett ebbe bele<br>
              Nem, tudni most merre lenne<br>
              És amiatt van benne mai napig<br>
              Jól esik hallgatják a szavait<br>
              Hullámzó az életszaka, dik<br>
              Megint eszébe jutott valami<br>
              <br>
              Barátom te alábecsültél hogyha azt hitted örökké csendes maradok<br>
              Ami régen volt azon szakadok<br>
              Megvagyok köszi látod haladok<br>
              Szaladok ezen a pályán hátha megtalálom sikeremet<br>
              Nem számít pihenek-e, nem hitegetek<br>
              Amiket kiadok hitelesek<br>
              Azt kik ezek heh?! A YouTube-on<br>
              Megy a competitive érlek utol<br>
              Jó a tendecia nem hazudok<br>
              Hallgatják azt amit én már unok<br>
              Emlékszem poénnak indult és vállaltam ha netán kinevetik<br>
              Cáfolj meg nyugodtan szerintem nyertem mert engem vagy a zenémet szeretik<br>
              <br>
              Engem vagy a zenémet szeretik<br>
              <br>
              Ayy, elhagytam barátokat<br>
              Ayy, rengeteg az áldozat<br>
              Ayy, követem az álmomat<br>
              Ayy, nem kérek tanácsokat<br>
              Ayy, teszek még a lángomra<br>
              Ayy, tervezek nagy távokra<br>
              Ayy, pörgetik a számomat<br>
              Ayy, köszi aki támogat<br>
              Kiszállok amikor stagnálok és azt látom ennél többet nem érhetek el<br>
              Úgy érzem lerakok valamit miközben posztol a neten sok élettelen<br>
              Lényegtelen<br>
              Hogy mi a flow mindig jön ami jön és az dinamikus<br>
              Gondoltam legalább hozok egy EP-t nem voltam mióta, na mi a szitu?<br>
            </div>
          </div>`;
        }
        if(obj.id == 6) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div>
              Szépítem építem a karrierem<br>
              Dobom a hatosokat csak figyeled<br>
              Csörög a telefon vajon ki keres?<br>
              Hey, Złoty, jössz konditerem?<br>
              Mehetünk bátyja várjatok<br>
              Noctaval komponálgatok<br>
              Valamit ami nem átlagos<br>
              Melegítsetek be szárnyalok<br>
            </div>
            <br>
            <div class="refren">
              Ránézek az órámra (Aha)<br>
              Most nem vagyok elfoglalt (Okay)<br>
              Leszarom a kurvákat (Bitch)<br>
              A spanokkal lógok ma (Let’s go)<br>
              Gyere gyere kedves nézz be hozzánk ha<br>
              Megyünk a srácokkal a kondiba<br>
              Felhúzás mehet száz kiló sima mindig hozzuk a formánkat csak szokiba<br>
              <br>
              Hozzuk a formánkat csak szokiba<br>
            </div>
            <br>
            <div>
              Azt hinnéd de nem járok rendszeresen<br>
              Csak mikor elhívnak és van kedvem<br>
              Hátha van valami csaj meglesem<br>
              Aki több éve edz eltemetem<br>
              Úúú, nem lehet bírni velünk<br>
              Más a faszát veri de mi edzünk<br>
              Lábnapot kihagyom karra megyünk<br>
              Nyugi figyelünk hogy miket eszünk<br>
            </div>
            <br>
            <div class="refren">
              Ránézek az órámra<br>
              Most nem vagyok elfoglalt<br>
              Leszarom a kurvákat<br>
              A spanokkal lógok ma<br>
              Gyere gyere kedves nézz be hozzánk ha<br>
              Megyünk a srácokkal a kondiba<br>
              Felhúzás mehet száz kiló sima mindig hozzuk a formánkat csak szokiba<br>
              <br>
              Hozzuk a formánkat csak szokiba<br>
            </div>
          </div>`;
        }
        if(obj.id == 7) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div class="refren">
              Vannak hosszú éjszakák, fárasztó reggelek<br>
              Elszívnék egy cigit nincsen szóval szövegelek<br>
              Nem egyszerű az az út, ami ide vezet<br>
              Majd pihenek eleget a Maldív-szigeteken<br>
            </div>
            <br>
            <div>
              Nem ismernek engem hallgatják a zenémet<br>
              Az emberek próbálják megfejteni miről beszélek<br>
              Azt várhatjátok mikor feladom az egészet<br>
              Ne zavarjátok a művészt hogyha felébred<br>
              Velem ne jó pofizz ha<br>
              Nem vagy a haverom remélem így már tiszta<br>
              Kíváncsiak a vakerom kiket szidja, vagy mi a titka?<br>
              Én mindig eredeti vagyok tényleg sok a csicska<br>
              Kiosztalak téged hiába mondod hogy szar a hangom <br>
              Rappelek és nem lesz az autotune maxon<br>
              Egyesekkel ellentétben nekem nincsen maszkom<br>
              Nem régóta kezdtem mégis vállalom az arcom<br>
              Ayy, én már egy pár éve felnőttem<br>
              Az évek alatt folyamatosan fejlődtem<br>
              Mindenkinek jár a szája bazd meg abból megjöttem<br>
              Viszont akadozni kezd a vonal köszöntem<br>
            </div>
            <br>
            <div class="refren">
              Vannak hosszú éjszakák, fárasztó reggelek<br>
              Elszívnék egy cigit nincsen szóval szövegelek<br>
              Nem egyszerű az az út, ami ide vezet<br>
              Majd pihenek eleget a Maldív-szigeteken<br>
              Vannak hosszú éjszakák, fárasztó reggelek<br>
              Elszívnék egy cigit nincsen szóval szövegelek<br>
              Nem egyszerű az az út, ami ide vezet<br>
              Majd pihenek eleget a Maldív-szigeteken<br>
            </div>
            <br>
            <div>
              Sok feladja az álmait elesetten<br>
              Hozni kell áldozatokat keseregnek<br>
              Inkább azt mondják ez nem megy nekik lehetetlen<br>
              Diplomával a kezében tehetetlen<br>
              Helyetekben a forintot złotyra cserélném<br>
              Ez a legjobb a befektetés növekszik az érték<br>
              Mindig szintet lépek mint valami gameplay<br>
              Eskü adjatok egy koronát vagy aranyérmét<br>
              Persze hibázok, hülyeséget csinálok<br>
              Nekem is vannak kudarcok ilyenek a királyok<br>
              Belőlük kimászok, csak tovább muzsikálok<br>
              Leszarom akinek nem tetszik nyugodtan rinyáljon<br>
              Ayy, én már egy pár éve felnőttem<br>
              Az évek alatt folyamatosan fejlődtem<br>
              Mindenkinek jár a szája bazd meg abból megjöttem<br>
              Viszont akadozni kezd a vonal köszöntem<br>
            </div>
            <br>
            <div class="refren">
              Vannak hosszú éjszakák, fárasztó reggelek<br>
              Elszívnék egy cigit nincsen szóval szövegelek<br>
              Nem egyszerű az az út, ami ide vezet<br>
              Majd pihenek eleget a Maldív-szigeteken<br>
              Vannak hosszú éjszakák, fárasztó reggelek<br>
              Elszívnék egy cigit nincsen szóval szövegelek<br>
              Nem egyszerű az az út, ami ide vezet<br>
              Majd pihenek eleget a Maldív-szigeteken<br>
            </div>
          </div>`; 
        }
        if(obj.id == 8) {
          document.getElementById('youtubePlayer').innerHTML += `
          <div class="lyrics m-3">
            <div class="refren">
              Nem megkérdőjelezhető<br>
              Az hogy a minőség nekem első<br>
              Gyarapszik az elégedett vevő<br>
              A feladó én vagyok nem meglepő<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
            </div>
            <br>
            <div>
              Ayy, honnan is jelentkezek?<br>
              No cap, éppen a gyárból<br>
              Mindig a pénz ami előre hajtott<br>
              Ha kellett dolgoztam bárhol<br>
              Éjjeli műszak, péntek itt dekkolok, hova hívnál?<br>
              Nélkülem menjetek nem tudom mit tegyek<br>
              A karrier oda kint vár<br>
              A sokadik sztár, lehetek én<br>
              Sokat néztem látszik gyerekmesét<br>
              A tömegből kitűnni persze nehéz<br>
              De tőlem nem hallasz gyenge verzét<br>
              Érkezik a kamion azt mondják<br>
              Rakodás belföld padlógáz!<br>
              Ne pampogjál!<br>
              Hozzon már valaki targoncát!<br>
            </div>
            <br>
            <div class="refren">
              Nem megkérdőjelezhető<br>
              Az hogy a minőség nekem első<br>
              Gyarapszik az elégedett vevő<br>
              A feladó én vagyok nem meglepő<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
            </div>
            <br>
            <div>
              Basszátok meg, mi van veletek<br>
              Ez már túl megy a határon<br>
              Szószerint<br>
              Felhívott a sofőr azt mondja a GPS-t követve külföldön kering<br>
              Nem számít a vámhatár nézi a rendőr függőséget okoz de legyint<br>
              Kapom a címeket megint<br>
              Megint és megint és megint<br>
              Az tény hogy növekszik a deviza<br>
              Nem szálltam el magamtól tesókám ne aggódj emiatt<br>
              Rengeteg a befektetett energia<br>
              Ayy, nem látjátok át<br>
              Amennyi szívás van vele nem egyszer gondolkoztam azon hogy feladom már<br>
              Pláne visszafog a gyár<br>
            </div>
            <br>
            <div class="refren">
              Nem megkérdőjelezhető<br>
              Az hogy a minőség nekem első<br>
              Gyarapszik az elégedett vevő<br>
              A feladó én vagyok nem meglepő<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
              <br>
              Landol az áru<br>
              Factory New<br>
              Landol a zene<br>
              Factory New<br>
              Factory New<br>
              Factory New<br>
              Landol az áru, Factory New<br>
              Landol a zene, Factory New<br>
            </div>
          </div>`;
        }
      document.getElementById('youtubePlayer').innerHTML += `</div>`;
    }
    scrollFunction()
  }

  function scrollFunction() {
      if (window.location.hash) {
        var targetElementID = window.location.hash.substring(1);
        console.log((targetElementID));
        if (document.getElementById(targetElementID)) {
          document.getElementById(targetElementID).scrollIntoView();
        }
      }
    }
</script>
</div>