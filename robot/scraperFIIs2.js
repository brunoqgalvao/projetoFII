const puppeteer = require('puppeteer');

(async () => {

    const fii = 'FIIB'


    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const url = `http://bvmf.bmfbovespa.com.br/Fundos-Listados/FundosListadosDetalhe.aspx?Sigla=${fii}&tipoFundo=Imobiliario&aba=abaEventosCorporativos&idioma=pt-br`
    await page.goto(url);

    const fiis = await page.evaluate(
        () => Array
        .from(document.querySelectorAll('table#ctl00_contentPlaceHolderConteudo_ucEventosCorporativos_grdDividendo_ctl01 td'))
        .map((fii) => fii.innerText)
    )
    // const fiisSplitado = fiis.split(' ')
    console.log(fiis[8])

    await browser.close();
})();