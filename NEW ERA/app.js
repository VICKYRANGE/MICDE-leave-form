function showSection(id) {
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => {
        section.style.display = 'none';
    });

    const target = document.getElementById(id);
    if (target) {
        target.style.display = 'block';
    }

    const menuItems = document.querySelectorAll('.list');
    menuItems.forEach(item => item.classList.remove('active'));
    
    event.target.closest('.list').classList.add('active');
}

window.onload = function () {
    showSection('homeContent');
};

function showSection(id) {
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => section.style.display = 'none');
    document.getElementById(id).style.display = 'block';
}

