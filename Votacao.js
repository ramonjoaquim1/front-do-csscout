import React from 'react';
import { Container, Row } from 'react-bootstrap';
import './styles.css';

const Votacao = () => {
    return (
        <div className="votacao-page">
            <header>{/* Header */}</header>
            <Container className="content">
                <h2 className="text-center mt-5">Votação - Melhor Jogador e Melhor Jogada da Semana</h2>
                <Row className="justify-content-center">
                    {/* Formulário de votação para melhor jogador */}
                    {/* Formulário de votação para melhor jogada */}
                </Row>
            </Container>
            <footer>{/* Footer */}</footer>
        </div>
    );
}

export default Votacao;
