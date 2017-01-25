@extends('template.master')
@section('contenido')

    <div class="col-xs-12 push-50-t">
        <div class="col-xs-12 center-b">
            <h2><i>100% WHEY PROTEIN ISOLATE </i>5 LB</h2>
        </div>
        <div class="col-lg-3 push-30-t col-lg-offset-1 col-xs-12">
            <p class="text-justify">
                <i>100% Whey Protein Isolated</i> es la proteína de suero aislada de más alta
                calidad disponible en el mercado. 0 gramos de carbohidratos y menos
                de 0,1 gramos de grasa por porción. <i>100% Whey Protein Isolated</i> contiene
                más de 29 gramos de proteína por 30 gramos de porción y se compone de
                más del 12% de leucina y 50% de aminoácidos esenciales.
            </p>
            <p class="text-justify">La proteína es uno de los nutrientes más abundantes y funcionales presente en
                nuestros músculos. Todo
                deportista sabe que una sana alimentación, rica en proteínas de calidad, mejorará significativamente su
                desempeño físico, logrando resultados más rápidos, duraderos y saludables.
            </p>
        </div>
        <div class="col-lg-4 center-b col-sm-6 col-xs-12 center-b">
            <img src="{{url('assets/img/pure-bulk.png')}}" class="col-xs-8 col-xs-offset-2 push-20-t" alt="pure-bulk"
                 title="Pure Bulk">
        </div>
        <div class="col-lg-3 center-b push-50-t text-left col-sm-5 col-xs-12 col-md-offset-3 col-md-offset-0">
            <button class="btn btn-rounded bg-white border col-xs-12 push-10-t"> - 0 gramos de carbohidratos</button>
            <button class="btn btn-rounded bg-white border col-xs-12 push-10-t">- menos de 0,1 gramos de <br> grasa por
                porción
            </button>
            <button class="btn btn-rounded bg-white border col-xs-12 push-10-t">- más de 26.4 gramos de proteína <br>por
                30 gramos de porción
            </button>
            <button class="btn btn-rounded bg-white border col-xs-12 push-10-t">- más del 12% de leucina y 50% <br>de
                aminoácidos esenciales
            </button>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-justify push-15-t">
            <p>En el mundo deportivo, la proteína de mayor valor biológico, rápida absorción y propiedades altamente
                anabolizantes, es la proteína de suero (whey protein). Adicionalmente, numerosos estudios recientes han
                demostrado que la proteína de suero tiene efectos altamente benéficos para reforzar el sistema
                inmunitario.
            </p>
            <p>La diferencia principal existente entre la proteína de suero aislada (isolate) y concentrada
                (concentrate) se basa en el proceso de fabricación. Cuanto más filtrada es la proteína, será más aislada
                y el resultado final será una proteína más pura (suelen tener una pureza de 90-97%) con niveles mucho
                más bajos de lactosa y grasa.
            </p>
            <p><i>100% Whey Protein Isolated</i> de <strong>pure bulk</strong> es la proteína de suero aislada de más
                alta calidad disponible en
                el mercado. 0 gramos de carbohidratos y menos de 0,1 gramos de grasa por porción. <i>100% Whey Protein
                    Isolated</i> de <strong>pure bulk</strong> contiene más de 26.4 gramos de proteína por 30 gramos de
                porción y se compone de
                más del 12% de leucina y 50% de aminoácidos esenciales. Uno de los aspectos más importantes de <i>100%
                    Whey
                    Protein Isolated</i> de <strong>pure bulk</strong> es que se compone mayoritariamente de
                a-lactoalbumina y ß-lactoglobulina,
                las dos proteínas dentro del suero que contienen el mejor perfil de aminoácidos para los atletas y
                fisicoculturistas. En términos de aporte nutricional y valor biológico, ninguna otra proteína de suero
                se compara.
            </p>
            <p>Si usted está buscando la proteína whey más pura y de mayor calidad en existencia, ya conoce <i>100% Whey
                    Protein Isolated</i> sin azúcar, soya, levadura, gluten, colorantes, saborizantes, solo proteína de
                suero
                aislada pura!
            </p>
        </div>
    </div>


    <div class="col-xs-12 push-30-t">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div class="block block-rounded block-link-hover3 text-center border">
                <div class="block-content ">
                    <div class="h1 font-w700"><span class="h2 text-muted">CO$</span> 180.000</div>
                    <div class="h5 text-muted text-uppercase push-5-t"><u>100% whey protein isolate</u></div>
                </div>
                 
                <div class=" block-content-mini text-white">
                    <form method="post" class="" action="https://gateway.payulatam.com/ppp-web-gateway/pb.zul"
                          accept-charset="UTF-8">
                        <button class="btn btn-primary btn-block"
                                onClick="this.form.urlOrigen.value = window.location.href;"><i
                                    class="glyphicon glyphicon-shopping-cart"></i> Comprar
                        </button>
                        <div class="hidden">
                            <input name="buttonId" type="hidden"
                                   value="4x4opPNJ/K7UdyDagOWvLA++nR5FodnSrGjRyWDUVsRwvV7olxs2oQ=="/>
                              <input name="merchantId" type="hidden" value="504756"/>
                              <input name="accountId" type="hidden" value="505717"/>
                              <input name="description" type="hidden" value="whey protein isolate 5lb"/>
                              <input name="referenceCode" type="hidden" value="001"/>
                              <input name="amount" type="hidden" value="188000"/>
                              <input name="tax" type="hidden" value="0"/>
                              <input name="taxReturnBase" type="hidden" value="0"/>
                              <input name="shipmentValue" value="8000" type="hidden"/>
                              <input name="currency" type="hidden" value="COP"/>
                              <input name="lng" type="hidden" value="es"/>
                              <input name="approvedResponseUrl" type="hidden" value="https://pure-bulk.com/gracias"/>
                              <input name="declinedResponseUrl" type="hidden" value="https://pure-bulk.com/no-exitosa"/>
                              <input name="pendingResponseUrl" type="hidden" value="https://pure-bulk.com/pendiente"/>
                              <input name="displayShippingInformation" type="hidden" value="YES"/>
                              <input name="displayBuyerComments" type="hidden" value="true"/>
                              <input name="sourceUrl" id="urlOrigen" value="" type="hidden"/>
                              <input name="buttonType" value="SIMPLE" type="hidden"/>
                              <input name="signature"
                                     value="d54c6d7bace4b9c836fc62572e1e98c46d4446ef40cbaa03ff02113dc7d5e99d"
                                     type="hidden"/>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection