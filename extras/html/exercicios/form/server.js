const express = require('express')
const app = express()
const bodyParser = require('body-parser')

app.use(bodyParser.urlencoded({extended: true}))

// incluir
app.post('/usuarios', (req, resp) => {
    console.log(req.body)
    // console.log(re.query) // utilizado com app.get
    resp.send('<h1>Parabéns. Usuário Incluido </h1>')
})
// alterar
app.post('/usuarios/:id', (req, resp) => {
    console.log(req.params.id)
    console.log(req.body)
    resp.send('<h1>Parabéns. Usuário Alterado</h1>')
})

app.listen(3003)