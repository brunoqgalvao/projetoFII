const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const url = 'http://bvmf.bmfbovespa.com.br/Fundos-Listados/FundosListadosDetalhe.aspx?Sigla=FIIB&tipoFundo=Imobiliario&aba=abaEventosCorporativos&idioma=pt-br'
    await page.goto(url);

    // const h2 = await page.evaluate(
    //     () => document.querySelector('h2').textContent
    // )

    const titles = await page.evaluate(
        () => Array.from(document.querySelectorAll('div#ctl00_contentPlaceHolderConteudo_ucEventosCorporativos_grdDividendo tr')).map((partner) => partner.innerText.trim())
    )

    // const logos = await page.evaluate(
    //     () => Array.from(document.querySelectorAll('.logo img')).map(logo => logo)
    // )

    console.log(titles)
    // console.log(logos)

    await browser.close();
})();