const puppeteer = require('puppeteer');

(async () => {

    const listaFii = ['FIIB', 'GGRC', 'KNCR', 'HGLG', 'KNIP', 'VISC']
    let i = 5

    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const url = `http://bvmf.bmfbovespa.com.br/Fundos-Listados/FundosListadosDetalhe.aspx?Sigla=${listaFii[i]}&tipoFundo=Imobiliario&aba=abaEventosCorporativos&idioma=pt-br`
    console.log(url)
    await page.goto(url);

    const proventosEmDinheiro = await page.evaluate(
        () => Array
        .from(document.querySelectorAll('table#ctl00_contentPlaceHolderConteudo_ucEventosCorporativos_grdDividendo_ctl01 td'))
        .map((provento) => provento.innerText)
    )
    const valor = await proventosEmDinheiro
    await console.log(valor[4])

    await browser.close();
})();