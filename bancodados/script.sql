
INSERT INTO cliente (nome_cliente, cpf_cliente, endereco_cliente, telefone_cliente, cep_cliente, numerocasa_cliente, email_cliente)
VALUES ('João Silva', '123.456.789-00', 'Rua A, Bairro X', '(123) 456-7890', '12345-678', '100', 'joao.silva@example.com'),
       ('Maria Santos', '987.654.321-00', 'Avenida B, Bairro Y', '(987) 654-3210', '67890-123', '200', 'maria.santos@example.com'),
       ('Carlos Oliveira', '111.222.333-44', 'Praça C, Bairro Z', '(111) 222-3333', '54321-987', '300', 'carlos.oliveira@example.com'),
       ('Ana Ferreira', '444.555.666-77', 'Alameda D, Bairro W', '(444) 555-6666', '78945-321', '400', 'ana.ferreira@example.com'),
       ('Pedro Almeida', '888.999.000-11', 'Avenida E, Bairro V', '(888) 999-0000', '14785-369', '500', 'pedro.almeida@example.com'),
       ('Mariana Costa', '222.333.444-55', 'Rua F, Bairro U', '(222) 333-4444', '96325-741', '600', 'mariana.costa@example.com');


INSERT INTO fornecedores (nome_fornecedores, cnpj_fornecedores, telefone_fornecedores)
VALUES ('Fornecedor A', '12345678901234', 1234567890),
       ('Fornecedor B', '56789012345678', 9876543210),
       ('Fornecedor C', '90123456789012', 2468101214),
       ('Fornecedor D', '34567890123456', 1357924680),
       ('Fornecedor E', '78901234567890', 9876543210);

INSERT INTO categorias (nome_categorias)
VALUES ('kit_transmissao'),
       ('oleo'),
       ('cabos'),
       ('carenagem');
       
   
INSERT INTO ordem_servicos (nome_funcionario_ordem_servicos, nome_moto_ordem_servicos, tipo_servico_ordem_servicos, nome_cliente_ordem_servicos, telefone_cliente_ordem_servico)
VALUES ('João', 'Moto X', 'Reparo', 'Cliente A', 1234567890),
       ('Maria', 'Moto Y', 'Manutenção', 'Cliente B', 9876543210),
       ('Carlos', 'Moto Z', 'Troca de Óleo', 'Cliente C', 1112223333),
       ('Ana', 'Moto W', 'Revisão', 'Cliente D', 4445556666),
       ('Pedro', 'Moto V', 'Personalização', 'Cliente E', 7778889999);
       
	
INSERT INTO pagamento (metodo_pagamento, valor_pagamento)
VALUES ('Cartão de Crédito', 100.00),
       ('Dinheiro', 50.50),
       ('Pix', 75.25),
       ('Transferência Bancária', 200.00);
     
     
INSERT INTO vendas (id_cliente, data_venda, hora_venda, valor_total)
VALUES (1, '2023-10-23', '12:30:00', 100.00),
       (2, '2023-10-23', '13:45:00', 50.50),
       (3, '2023-10-23', '15:00:00', 75.25),
       (4, '2023-10-23', '16:30:00', 200.00);
    
    
INSERT INTO funcionarios (nome_funcionario, cpf_funcionario, cargo, data_contratacao, salario_funcionarios)
VALUES ('João Silva', '123.456.789-00', 'Gerente', '2022-01-01', 5000.00),
       ('Maria Santos', '987.654.321-00', 'Assistente', '2022-03-15', 3000.00),
       ('Carlos Oliveira', '111.222.333-44', 'Analista', '2022-02-10', 4000.00),
       ('Ana Ferreira', '444.555.666-77', 'Desenvolvedor', '2022-04-20', 4500.00),
       ('Pedro Almeida', '888.999.000-11', 'Estagiário', '2022-05-05', 2000.00);


INSERT INTO venda_produto (id_venda, id_produto, quantidade, valor_unitário)
VALUES (1, 101, 2, 50.00),
       (1, 102, 1, 30.00),
       (2, 103, 3, 25.00),
       (2, 104, 2, 40.00);
       
       
INSERT INTO produtos (id_produtos, nome_produtos, valor_produtos, categoria_produtos)
VALUES (1, 'Produto A', 50.00, 'Categoria 1'),
       (2, 'Produto B', 30.00, 'Categoria 2'),
       (3, 'Produto C', 25.00, 'Categoria 1'),
       (4, 'Produto D', 40.00, 'Categoria 2');


INSERT INTO login (login_login, senha_login)
VALUES ('user1', 'password1'),
       ('user2', 'password2'),
       ('user3', 'password3'),
       ('user4', 'password4');



