$(document).ready(() => {
    // footer
    $('footer #anio_footer').html(new Date().getFullYear());

    //side nav
    $('li > a').on('click',function() {
        location = $(this).data('url');
    })
    
    let rutas = ['index','nosotros', 'contacto', 'carta'];
    let path = location.pathname;
    rutas.forEach(function( val,key ) {
        if(path.indexOf(val) != -1){
                let element = `#${val} > a`;
                let colapse = $(element).data('target');
                $(element).toggleClass('active');
                $(element).find('.rotate-icon').toggleClass('rotated');
                $(colapse).addClass('show');
            
            // let icons = $('#accordion_sidenav li');
            // icons.each(function(key,val) {
            //     $(val).find('a').removeClass('active'); 
            //     $(val).find('.rotate-icon').removeClass('rotated'); 
            // })
            
            // let valor = $(this).attr('aria-expanded');
            // if(valor == 'false'){
            //     $(this).toggleClass('active');
            //     $(this).find('.rotate-icon').toggleClass('rotated');
            // }

        };
    })

    // mcarta - modal 

    carta =[
        { categ : 'pollos',  plato: 'pecguga',   desc: 'nuevo', price: '12.000', img: 'assets/img/carne3.jpg'  },
        { categ : 'carnes',  plato: 'Parrilla',  desc: 'nuevo', price: '12.000', img: 'assets/img/carne3.jpg'  },
        { categ : 'carnes',  plato: 'Churrasco', desc: 'nuevo', price: '12.000', img: 'assets/img/carne3.jpg'  },
        { categ : 'kids',    plato: 'perro',     desc: 'nuevo', price: '12.000', img: 'assets/img/carne3.jpg'  },
    ];
        
    $('.img-carta').on('click',function() {
        let categ = $(this).data('categ');
        

        let indicators = '';
        let slides = '';
        items = 0;
        carta.forEach(function( val,key ) {
            if (categ == val.categ) {
                indicators += `<li data-target=".carousel" data-slide-to="${items}" class="${items == 0? 'active': ''}"></li>`;
                slides +=  `
                        <div class="carousel-item mb-3 ${items == 0? 'active': ''}" data-interval="6000">
                            <div class="carousel-title col-10 mx-auto bg-obscure h-auto">
                                <h3 class="font-peq p-0 text-center titulo m-0 text-uppercase">
                                ${val.categ}<br>${val.plato}</h3>
                            </div>
                            <div class="p-3">
                                <img class="img-fluid b-radius2 col-8 mx-auto p-0" src="${val.img}" alt="${val.plato}">
                            </div>
                            <div class="col-10 mx-auto modal-content-descripcion">
                                <h5 class="p-0 text-center">
                                    Descripción del Plato:
                                    <br>
                                    ${val.desc}
                                    <br>
                                    Precio: $ ${val.price}
                                </h5>
                            </div>
                        </div> `;
                items++;
            }
        })

        if (items == 0) {
            slides +=  `
                        <div class="carousel-item mb-3 active" data-interval="6000">
                            <div class="carousel-title mx-auto bg-obscure col-6 h-100 p-5">
                                <h3 class="font-peq p-0 text-center titulo m-0 text-uppercase line-h">
                                No hay platos para mostrar en esta categoría.
                                </h3>
                            </div>
                        </div> `;
        }
        $('.carousel-indicators').html(indicators);
        $('.carousel-inner').html(slides);
        $('#modal').modal('show');
            
    })

    


})