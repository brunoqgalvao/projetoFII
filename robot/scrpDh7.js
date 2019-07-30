const puppeteer = require('puppeteer');

(async () => {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    const url = 'https://areademembros.dicadehoje7.com/'
    console.log(url)
    await page.goto(url);

    await page.click('a#encolher')
    await page.screenshot({
        path: 'example.png'
    });

    await browser.close();
})();