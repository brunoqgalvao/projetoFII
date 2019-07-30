const puppeteer = require('puppeteer');

(async () => {

    const listaFii = ['FIIB', 'GGRC', 'KNCR']
    const browser = await puppeteer.launch();
    for (let i = 0; i < listaFii.length; i += 1) {


        const page = await browser.newPage();
        const url = `http://bvmf.bmfbovespa.com.br/Fundos-Listados/FundosListadosDetalhe.aspx?Sigla=${listaFii[i]}&tipoFundo=Imobiliario&aba=abaEventosCorporativos&idioma=pt-br`
        console.log(url)
        await page.goto(url, {
            waitUntil: 'domcontentloaded'
        });

        const proventosEmDinheiro = await page.evaluate(
            () => Array
            .from(document.querySelectorAll('table#ctl00_contentPlaceHolderConteudo_ucEventosCorporativos_grdDividendo_ctl01 td'))
            .map((provento) => provento.innerText)
        )

        let valor = await proventosEmDinheiro
        for (let i = 4; i <= valor.length; i += 8) {
            await console.log(valor[i])
        }
    }
    // await console.log(valor)
    // const fiisSplitado = fiis.split(' ')
    // await console.log(proventosEmDinheiro)

    await browser.close();
})();