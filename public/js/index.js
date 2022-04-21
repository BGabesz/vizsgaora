$(function() {
    const myAjax = new MyAjax();
    let apiVegpont = "/api/szakdogak";
    myAjax.adatbeolvas(apiVegpont, false, tablazatbaRak);

    function tablazatbaRak(tomb) {
        console.log(tomb);
        const szuloElem = $(".tablazat table");

        const sablonElem = $("footer .szakdoga ");
        sablonElem.show();
        szuloElem.empty();
        szuloElem.append("<tr><th>Szakdolgozat címe</th><th>Készítők neve</th><th>Github link</th><th>Szakdolgozat elérhetőség</th><th></th><th></th></tr > ");
        tomb.forEach(function(elem) {
            console.log(elem);
            let node = sablonElem.clone().appendTo(szuloElem);
            new Szakdoga(node, elem);
        });
        sablonElem.hide();
        $(sablonElem).hide();
    }
    /* $(".szerkesztGomb").on("click", () => {
        console.log("hop");
    }); */
    $(window).on("szerkesztes", (event) => {
        apiVegpont = "/api/szakdogak";
        let adat = {
            cim: $('.szakdogaCim').val(),
            neve: $('.keszitokneve').val(),
            oldalelerhetoseg: $('.oldalElerhetoseg').val(),
            gitelerhetoseg: $('.githubElerhetoseg').val(),
        }
        console.log(adat);
        myAjax.adatmodosit(apiVegpont, adat, event.detail.id);
        window.location.reload();
    });
    $(window).on("torles", (event) => {
        /* console.log(); */
        let id = event.detail.id;
        apiVegpont = "/api/szakdogak";
        myAjax.adattorles(apiVegpont, id);

        console.log("torol");
    });

    $(".felvisz").on("click", () => {
        $(".githubElerhetoseg").val();
        apiVegpont = "/api/szakdogak";
        szoveg = {
            szakdogaCim: $(".szakdogaCim").val(),
            keszitokneve: $(".keszitokneve").val(),
            oldalElerhetoseg: $(".oldalElerhetoseg").val(),
            githubElerhetoseg: $(".githubElerhetoseg").val()
        }
        console.log(szoveg);
        myAjax.adatkuldes(apiVegpont, szoveg);
        console.log("felvisz");
    });
    console.log("hi");
});