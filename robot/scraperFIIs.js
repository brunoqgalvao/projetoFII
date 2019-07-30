const puppeteer = require('puppeteer');

(async () => {

    const fii = 'KNIP'

    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const url = `http://bvmf.bmfbovespa.com.br/Fundos-Listados/FundosListadosDetalhe.aspx?Sigla=${fii}&tipoFundo=Imobiliario&aba=abaEventosCorporativos&idioma=pt-br`
    await page.goto(url);

    const fiis = await page.evaluate(
        () => Array.from(document.querySelectorAll('div#ctl00_contentPlaceHolderConteudo_ucEventosCorporativos_grdDividendo tr')).map((fii) => fii.innerText.trim())
    )

    console.log(fiis)

    await browser.close();
})();

// table#ctl00_contentPlaceHolderConteudo_ucEventosCorporativos_grdDividendo_ctl01 tr