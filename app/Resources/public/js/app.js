window.onload = (event) => {
    const menu = document.querySelector('#blog-sidebar');

    let currentLinks = menu.querySelectorAll('a[href="' + window.location.pathname + '"]');
    currentLinks.forEach(link => link.className += ' text-violet-900 font-bold');

    let pathArray = window.location.pathname.split('/');
    let parentLinks = menu.querySelectorAll('a[href="/' + pathArray[1] + '"]');
    parentLinks.forEach(link => link.className += ' border-l-8 border-purple-300');
}