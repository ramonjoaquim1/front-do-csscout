function Formulario({ botao, eventoTeclado, cadastrar, obj, cancelar, remover, alterar }) {
  // Função para lidar com a alteração
//const alterar = () => {
    // Certifique-se de que a função alterar foi passada como propriedade
   // if (alterar) {
     // alterar(obj); // Chama a função alterar passando o objeto atual
    //}
//};
  // Função para lidar com a remoção
const handleRemover = () => {
    // Certifique-se de que a função remover foi passada como propriedade
    if (remover) {
      remover(obj); // Chama a função remover passando o objeto atual
    }
};
return (
    <form>
<input type='text' value={obj.nome} onChange={eventoTeclado} name='nome' placeholder='Nome' className='form-control' />
<input type='text' value={obj.marca} onChange={eventoTeclado} name='marca' placeholder='Marca' className='form-control' />

{botao ? (
        <input type='button' value='Cadastrar' onClick={cadastrar} className='btn-primary' />
) : (
        <div>
<input type='button' value='Alterar' onClick={alterar} className='btn btn-warning' />
<input type='button' value='Remover' onClick={handleRemover} className='btn btn-danger' />
<input type='button' value='Cancelar' onClick={cancelar} className='btn btn-secondary' />
        </div>
)}
    </form>
);
}
export default Formulario;