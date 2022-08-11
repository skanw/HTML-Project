import React, {useState} from 'react'
import {Data} from './Data';
import styled from 'styled-components';
import {IconContext} from 'react-icons';
import {FiPlus, FiMinus, FiAlignRight} from 'react-icons/fi';


const FaqSection = styled.div`
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    position: relative;
    height: 100vh;
    background: #FFFFFF;
    box-shadow: 0.5rem 2px 0.5rem rgba(0, 0, 0, 0.1);
    font-family: 'Poppins', sans-serif;
    margin: 0 auto;
    padding: 0 1.5rem;
    padding-bottom: 2rem;
    margin-bottom: 2rem;
`;
const Container = styled.div`
    position: absolute;
    top: 30%;
    box-shadow: 2px 10px 35px 1px rgba(153, 153, 153, 0.3);    
`;
const Wrap = styled.div`
    background: #005595;
    color: #FFFFFF;
    display: flex;
    justify-content: space-between:
    align-items: center;
    text-align: center;
    cursor: pointer;

    h1 {
        padding: 2rem;
        font-size: 2rem;
        text-align: center;
    }

    span {
        margin-right: 1.5rem;
        align-items: right;
        padding: 0.5rem;
    }

    
`;

const Dropdown = styled.div`
    background: #F3F3F3;
    color: #000000;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    border-left: 2px solid #FFCE00;
    border-right: 2px solid #FFCE00;
    border-bottom: 2px solid #FFCE00;
    border-top: 2px solid #FFCE00;
  
    p {
      font-size: 2rem;
    }
`;

const Faq = () => {
    const[clicked, setClicked] = useState(false);
    const toggle = index => {
        if(clicked === index) {
            return setClicked(null);
        }
        setClicked(index); 
    }
  return (
    <IconContext.Provider value={{color: '#FFCE00', size: '25px'}}>
        <FaqSection>
            <Container>
                {Data.map((item, index) => {
                    return(
                        <>
                        <Wrap onClick = {() => toggle(index)} key = {index}>
                            <h1>{item.question}</h1>
                            <span>{clicked === index ? <FiMinus /> : <FiPlus />}</span>
                        </Wrap>
                        {clicked === index ? (
                        <Dropdown>
                            <p>{item.answer}</p>
                        </Dropdown>
                        ) : null}
                        </>
                    )
                })}
            </Container>
            <a href="home.php">Go back to homepage</a>
        </FaqSection>   
    </IconContext.Provider>
  );
};

export default Faq;