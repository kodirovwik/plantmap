const $ = {}

let user = document.getElementById('user').value
if (user === 'Привет') {
function _createModal (options) {
    const modal = document.createElement('div')
    modal.classList.add('modal')
    modal.insertAdjacentHTML('afterbegin',`
    <div class="modal_overlay">
        <div class="modal_window">
            <div class="modal_header">
                <span class="modal_title">Ошибка</span>
                <span class="modal_close">&times;</span>
            </div>
            <div class="modal_body">
                <p>Неверное имя пользователя или пароль</p>
            </div>
        </div>
    </div>
    `)
    document.body.appendChild(modal)
    return modal
}
$.modal = function (options) {
    const Animation_Speed = 300
    const $modal = _createModal(options)
    let closing = false
    return {
            open () {
                !closing && $modal.classList.add('open')
            },
            close() {
                closing = true
                $modal.classList.remove('open')
                $modal.classList.add ('hide')
                setTimeout (()=> {
                    $modal.classList.remove('hide')
                    closing = false
                }, Animation_Speed)

            }
        }
    }
    const modal = $.modal()
    console.log(modal.open())
}
