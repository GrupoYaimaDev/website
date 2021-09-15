export const gtData = {
    'json': 0,
    'text': 1
}

export const defgetDataFromUrl = {
    method: 'GET',
    body: null,
    rType: 'json'
}
/**
 * esta funcion remplaza el uso de fetch dentro del sistema permitiendo acceder,
 * usando una promise a el resultado del promise en JSON, TEXT o en caso de falla
 * un return de NULL.
 * @param {string} url 
 * @param {object} param1 
 * @returns 
 */
 export async function getDataFromUrl(url, { method = 'GET', body = null, rType = 'json' } = defgetDataFromUrl) {
    const operation = await fetch(url, { method: method, body: body });
    return HandlerResponse(operation, gtData[rType])
}

/**
 * esta funcion se encarga de enviar las respuestas indicadas, usadas en el promise de fetch.
 * y asi evitar codigo repetitivo.
 * @param {Object} r 
 * @param {number} type 
 * @returns json | text | null
 */

export function HandlerResponse(r, type = 0) {
    // console.log('handelr')
    switch (parseInt(r.status)) {
        case 200:
            return type == 0 ? r.json() : r.text();
            break;

        default:
            return null;
            break;
    }
}