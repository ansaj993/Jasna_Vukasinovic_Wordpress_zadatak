const btn = document.getElementById('share');
const shareInput = document.querySelector('.article-share input');

btn.addEventListener('click', function(){
    shareInput.select();
    shareInput.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    document.getSelection().toString(shareInput.value);

    // Alert the copied text
    alert("Copied the text: " + shareInput.value);
})

const search = document.querySelector('.search-block');
const searchForm = document.querySelector('.search-form-block');

search.addEventListener('click', function(){
    searchForm.classList.toggle('active');
})