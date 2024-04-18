<style>
  .container {
    max-width: none;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #panel {
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    margin: auto;
    max-width: 1250px;
    border-radius: 25px;
  }

  #logo{
    max-width: 250px;
  }

  .ikon{
    width: 300px;
    height: 300px;
  }

  .email{
    font-style: italic;
  }

  #youtube:hover img{
    content: url('images/youtube_white.png');
  }
  #spotify:hover img{
    content: url('images/spotify_white.png');
  }
  #applemusic:hover img{
    content: url('images/applemusic_white.png');
  }
  #instagram:hover img{
    content: url('images/instagram_white.png');
  }
  #tiktok:hover img{
    content: url('images/tiktok_white.png');
  }
  #email:hover img{
    content: url('images/email_white.png');
  }
</style>

<div class="container text-center">
  <div class="row" id="panel">

      <div class="m-5 ikon">
        <div id="youtube" class="m-3">
          <a href="https://www.youtube.com/@zlotymusic0520" target="_blank">
            <img src="images/youtube_red.png" alt="youtube" id="logo">
          </a>
        </div>
        <div>
          <h2>YouTube</h2>
        </div>
      </div>

      <div class="m-5 ikon">
        <div id="spotify" class="m-3">
          <a href="https://open.spotify.com/artist/2SNNlfJUFJazH2zzT5K56l" target="_blank">
            <img src="images/spotify_red.png" alt="spotify" id="logo">
          </a> 
        </div>
        <div>
          <h2>Spotify</h2>
        </div>
      </div>
      
      <div class="m-5 ikon">
        <div id="applemusic" class="m-3">
          <a href="https://music.apple.com/hu/artist/z%C5%82oty/1676988260" target="_blank">
            <img src="images/applemusic_red.png" alt="applemusic" id="logo">
          </a>
        </div>  
        <div>
          <h2>Apple Music</h2>
        </div>
      </div>

      <div class="m-5 ikon">
        <div id="instagram" class="m-3">
          <a href="https://www.instagram.com/aaronzsolt/" target="_blank">
            <img src="images/instagram_red.png" alt="instagram" id="logo">
          </a>
        </div>
        <div>
          <h2>Instagram</h2>
        </div>
      </div>

      <div class="m-5 ikon">
        <div id="tiktok" class="m-3">
          <a href="https://www.tiktok.com/@zlotymusic" target="_blank">
            <img src="images/tiktok_red.png" alt="tiktok" id="logo">
          </a>
        </div>
        <div>
          <h2>TikTok</h2>
        </div>
      </div>

      <div class="m-5 ikon">
        <div id="email" class="m-3">
          <a href="https://mail.google.com/mail/u/0/?to=zlotymusic@gmail.com&su=&body=&fs=1&tf=cm" target="_blank">
            <img src="images/email_red.png" alt="email" id="logo">
          </a>
        </div>
        <div>
          <h2 class="email">zlotymusic@gmail.com</h2>
        </div>
      </div>

  </div>
</div>