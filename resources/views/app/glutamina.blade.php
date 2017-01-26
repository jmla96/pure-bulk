@extends('template.master')
@section('contenido')

    <div class="col-xs-12 push-50-t">
        <div class="col-xs-12 center-b">
            <h2><i>GLUTAMINE </i> 500 GRM</h2>
        </div>
        <div class="col-lg-3 push-30-t col-lg-offset-1 col-xs-12 text-justify">
            <p>
                La glutamina PURE BULK se presenta en un polvo de grado farmacéutico 100% puro. La glutamina es uno de
                los
                suplementos nutritivos deportivos más populares del mundo, principalmente por la gran variedad de
                beneficios
                que este aporta al deportista.
            </p>
            <p>
                Se trata del aminoácido más abundante del tejido muscular que el organismo produce naturalmente. Pese a
                ello
                y a su presencia en ciertos alimentos, como la carne y el pescado, esta cantidad no es suficiente para
                las
                personas que practican ejercicios con regularidad.
            </p>
        </div>
        <div class="col-lg-4 center-b col-sm-6 col-xs-12 center-b">
            <img src="{{url('assets/img/pure-bulk.png')}}" class="col-xs-8 col-xs-offset-2 push-20-t" alt="pure-bulk"
                 title="Pure Bulk">
        </div>
        <div class="col-lg-3 center-b push-50-t text-left col-sm-5 col-xs-12 col-md-offset-3 col-md-offset-0">
            <button class="btn btn-rounded bg-white border col-xs-12 push-10-t"> - L-glutamina al 100%</button>
            <button class="btn btn-rounded bg-white border col-xs-12 push-10-t">- Apta para <br> vegetarianos y vegetarianos estrictos</button>
        </div>
    </div>
    <div class="col-xs-12">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-justify push-15-t">
            <p>Si usted se toma el entrenamiento en serio, la glutamina constituye un suplemento imprescindible que debe
                administrarse a diario. Reduce el tiempo de recuperación del ejercicio, previene la pérdida muscular,
                mejora
                el reabastecimiento de glucógeno y fortalece el sistema inmunitario. De hecho, la glutamina es un
                suplemento
                tan eficaz que hasta se indica en hospitales para pacientes de cama a fin de reforzar el sistema
                inmunitario
                y prevenir la atrofia muscular producto de la inactividad.
            </p>
            <p>La glutamina PURE BULK ofrece actualmente el mejor precio de toda Colombia. En definitiva, no encontrará
                otra glutamina en polvo de esta calidad y precio en ningún otro lado.
            </p>
            <p class="h3">USO</p>
            <p>Mezcle 1 cucharada colmada (aproximadamente 5 g) con 50 ml de agua o con un batido proteínico. Se
                recomienda
                entre una y tres tomas diarias.
            </p>
            <p class="h3">SINÉRGICOS</p>
            <p>Acompañar la glutamina de un hidrato de carbono de rápida acción, como el almidón de maíz ceroso, puede
                contribuir a agilizar el transporte de glutamina a las células musculares. Esta combinación es ideal
                para
                después de hacer ejercicio, cuando los músculos necesitan aminoácidos.
            </p>
            <p>La glutamina se complementa con muchos otros productos: desde otros aminoácidos, como los BCAA de
                preparación instantánea, hasta otros productos para estimular los músculos, como la 100% whey proteín
                isolate.
            </p>
            <p class="h3">NUESTRA CALIDAD</p>
            <p>Al igual que con todos los productos de Pure Bulk este producto se obtiene directamente de proveedor
                aprobados. Todos nuestros proveedores son rigurosamente auditados para asegurar que cumplan con nuestros
                altos estándares y que prueban rutinariamente productos como parte de nuestros procedimientos de control
                de
                calidad interno. Nosotros sólo trabajamos con un pequeño número de proveedores seleccionados. Además,
                todos
                los productos de Pure Bulk son envasados en nuestras propias bodegas. Todo esto se combina para
                garantizar
                que ofrecemos sólo productos de la más alta calidad para usted, pero, como siempre, a los precios más
                bajos
                en Colombia.
            </p>
        </div>
    </div>


    <div class="col-xs-12 push-30-t">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div class="block block-rounded block-link-hover3 text-center border">
                <div class="block-content ">
                    <div class="h1 font-w700"><span class="h2 text-muted">CO$</span> 90.000</div>
                    <div class="h5 text-muted text-uppercase push-5-t"><u>GLUTAMINE 500 GRM</u></div>
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
                                   value="yh+dJ+obzPfAToeoQpRdgSwzK9HJvtfMVt/w6KuevGohYmsa310tiw=="/>
                              <input name="merchantId" type="hidden" value="504756"/>
                              <input name="accountId" type="hidden" value="505717"/>
                              <input name="description" type="hidden" value="Glutamina 500 grm pure bulk"/>
                              <input name="referenceCode" type="hidden" value="003"/>
                              <input name="amount" type="hidden" value="98000"/>
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
                                     value="793cfb966e79a537209fc7ca1fdb4b4e9322ff99c2be8a4730cf723b8d61d5f2"
                                     type="hidden"/>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection