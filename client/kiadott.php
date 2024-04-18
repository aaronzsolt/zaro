<style>
  #imageBB{
      display: flex;
      justify-content: center;
    }

  .nagyito{
    transition: transform 0.3s ease;
    position: relative; 
    display: inline-block; 
  }

  .nagyito:hover{
    transform: scale(1.05);
    box-shadow: 0px 0px 25px 10px #DC143C;
  }

  .nagyito iframe{
    z-index: 2; 
  }

  .blocker{ 
    position: absolute; 
    height:100%; 
    width:100%; 
    z-index:1;   
  }

  #fejlec{
    background-color: rgba(0, 0, 0, 0.5);
    max-width: 1000px;
    margin: auto;
    padding: 5px;
  }
</style>

<div class="text-center m-3">
  <div>
    <h3 class id="fejlec">A zene hallgatásához és annak szövegéhez kattints a kívánt zene borítójára!</h3>
  </div>

  <div class="row" id="ImageBB"></div>

  <script>
    getData("../server/kiadott.php", renderBorito)
    function renderBorito(data) {
      console.log(data);
      for(let obj of data){
        console.log(obj.borito, obj.cim);
        document.getElementById('ImageBB').innerHTML += `
        <div class="p-0 m-3">
          <div id="${obj.id}" class="p-0 m-3 kartya">
            <a href="index.php?prog=hallgato.php&targetElementID=#${obj.id}" class="nagyito">
              <div class="blocker"></div>
              <iframe width="300" height="300" src="https://i.ibb.co/${obj.borito}" 
                frameborder="0" allowfullscreen class="borito"></iframe>
            </a>      
          </div> 
          <h2>${obj.cim}</h2>  
        </div>
        `
      }
    } 
  </script>
</div>