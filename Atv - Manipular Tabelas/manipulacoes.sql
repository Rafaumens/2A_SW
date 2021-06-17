INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300100', '80.00', '30.00', '2021-06-05', 'C00100', 'R001', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300101', '10.00', '5.00', '2021-06-05', 'C00101', 'R002', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300102', '9000.00', '800.00', '2021-06-06', 'C00102', 'R003', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300103', '562.00', '350.00', '2021-06-06', 'C00103', 'R004', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300104', '222.00', '111.00', '2021-06-07', 'C00104', 'R005', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300105', '181.00', '121.00', '2021-06-07', 'C00105', 'R006', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300106', '999.00', '555.00', '2021-06-08', 'C00106', 'R007', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300107', '741.00', '147.00', '2021-06-08', 'C00107', 'R008', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300108', '852.00', '258.00', '2021-06-09', 'C00108', 'R009', 'SOD');

INSERT INTO orders (ORD_NUM, ORD_AMOUNT, ADVANCE_AMOUNT, ORD_DATE, CUST_CODE, AGENT_CODE, ORD_DESCRIPTION) 
VALUES ('300109', '963.00', '369.00', '2021-06-09', 'C00109', 'R010', 'SOD');

UPDATE orders SET ORD_DESCRIPTION = "ATUALIZADO SOD" WHERE ORD_NUM > '300099';

DELETE FROM orders WHERE ORD_NUM < '300099';