const adminToolbar = () => {
  if (document.querySelector('#wp-toolbar')) {
    let wrapper = document.querySelector('.wrapper');
    let header = document.querySelector('.header');
    wrapper.classList.add('admin-toolbar');
    header.classList.add('admin-toolbar');
  }

  const anchors = document.querySelectorAll('a[href*="#"]');

anchors.forEach(anchor => {
    anchor.addEventListener("click", function (e) {
        if(!document.getElementById(this.getAttribute('href').substr(1))) return;
        e.preventDefault();

        const $blockTo = document.getElementById(this.getAttribute('href').substr(1));

        window.scrollTo({ top: $blockTo.offsetTop - 130, behavior: "smooth" });
    })
});
};

export {adminToolbar};
