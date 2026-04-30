let body = document.getElementById('body')
let commentbox = document.getElementById('comment')
let btn = document.getElementById('btn')

let ul = document.createElement('ul')



body.appendChild(ul)



btn.addEventListener('click',()=>{
    let commentboxValue = commentbox.value;

    if(commentboxValue !== ""){
        let li = document.createElement('li')
        li.innerText = commentboxValue;
        ul.appendChild(li);
    }


    commentbox.value = ''
  
})













