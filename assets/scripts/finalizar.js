var but = document.querySelectorAll('.btn-danger');


but.forEach((e) => {
    e.addEventListener('click', () =>{
        let pedido = {
            "id": e.id
        }
        let params = {
            "method":"POST",
            "headers":{
                "Content-Type": "application/json; charset=utf-8"
            },
            "body": JSON.stringify(pedido)
        }
        fetch("finalizar.php", params).then(() => {
            location.reload()
        });
    })
})

