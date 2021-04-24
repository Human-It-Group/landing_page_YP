function showDiv() {
    document.getElementById('welcomeDiv').style.display = "block";
  }
  
  function hideDiv(){
    document.getElementById('block_form_page_1').style.display = "none";
    document.getElementById('block_form_page_2').style.display = "grid";

  }
  
  function showDivGratulation() {
    document.getElementById('welcomeDivGratulation').style.display = "block";
  }
  function hideDivGratulation(){
    document.getElementById('welcomeDivGratulation').style.display = "none";
  }



const fileUploader = document.getElementById('file-uploader');

fileUploader.addEventListener('change', (event) => {
  const files = event.target.files;
  console.log('files', files);
  
  for (const file of files) {
    const name = file.name;

    console.log({file, name});
    
    const feedback = document.getElementById('feedback');
    const msg = ` CV: ${name}`;
              
    feedback.innerHTML = msg;
  }
});