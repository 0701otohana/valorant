document.querySelector('#nav-toggle,#overlay').addEventListener('click', function(){
    this.classList.toggle('open');
    document.querySelector('body').classList.toggle('open');
  })