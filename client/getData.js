async function getData(url, renderFc){
    console.log()
    const response = await fetch(url)
    const data = await response.json()
    renderFc(data)
}