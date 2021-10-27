<div class="container-fluid w-90 scroll-reveal-item">
    <div class="select-fields row mb-4 scroll-reveal-item">
        <div class="col-lg-4">
            <select class="form-control" id="countrySelect">
                <option value="" selected disabled>selecione o país</option>
                <option value="Brasil">Brasil</option>
                <option value="Argentina">Argentina</option>
            </select>
        </div>

        <div class="col-lg-4">
            <select class="form-control" id="stateSelect">
                <option value="" selected disabled>selecione o estado</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Santa Catarina">Santa Catarina</option>
            </select>
        </div>
    </div>

    <div class="row stores mt-4" id="stores"></div>
</div>

<?php include('./store.php') ?>

<script>

    const stores = [];

    <?php foreach($stores as $store) { ?> 

        stores.push({
            name: '<?=$store->name;?>',
            city: '<?=$store->city;?>',
            state: '<?=$store->state;?>',
            country: '<?=$store->country;?>',
            address: '<?=$store->address;?>',
            number: '<?=$store->number;?>',
            comp: '<?=$store->comp;?>',
            neighborhood: '<?=$store->neighborhood;?>',
            zip: '<?=$store->zip;?>',
            routes: '<?=$store->routes;?>',
            instagram: '<?=$store->instagram;?>',
            whatsapp: '<?=$store->whatsapp;?>',
            phone: '<?=$store->phone;?>',
            email: '<?=$store->email;?>',
            image: '<?=$store->image;?>',
        });
    
    <?php } ?>
    
    let html = "";
    stores.forEach(store => {
        html += `
            <div class="col-lg-3 store scroll-reveal-item" data-state="${store.state}" data-country="${store.country}">
                <div class="store-skew">
                    <div class="store-image" style="background-image: url(${store.image})">
                        <div class="store-name text-center">${store.name}</div>
                    </div>
                </div>
                <div class="store-content">
                    <div class="store-address">
                        <p class="store-state">Estado: ${store.state}</p>
                        <p class="store-city">Cidade: ${store.city}</p>
                        <p class="store-address">${store.address}</p>
                        <p class="store-number">n°: ${store.number}</p>
                        <p class="store-comp">Complemento: ${store.comp}</p>
                        <p class="store-neighborhood">Bairro: ${store.neighborhood}</p>
                        <p class="store-zip">CEP: ${store.zip}</p>
                        <p class="store-instagram">
                            <img src="/assets/address-instagram.png"> @${store.instagram}
                        </p>
                        <hr>
                        <p class="with-icon store-routes">
                            <a href="${store.routes}" target="_blank">Como chegar</a>
                        </p>
                        <p class="with-icon store-whatsapp">
                            ${store.whatsapp}
                        </p>
                        <p class="with-icon store-phone">
                            ${store.phone}
                        </p>
                        <p class="with-icon store-email">
                            ${store.email}
                        </p>
                    </div>
                </div>
            </div>
        `;
    });

    $("#stores").html(html);


</script>