import React from 'react';
import { Container, Row } from 'react-bootstrap';
import './styles.css';

const Ranking = () => {
    return (
        <div className="ranking-page">
            <header>{/* Header - conteúdo semelhante ao exemplo anterior */}</header>
            <Container className="content">
                <h2 className="text-center mt-5">Ranking - Melhores Jogadores</h2>
                <Row className="justify-content-center">
                    {/* Conteúdo - cards com os melhores jogadores */}
                </Row>
            </Container>
            <footer>{/* Footer - conteúdo semelhante ao exemplo anterior */}</footer>
        </div>
    );
}

export default Ranking;
