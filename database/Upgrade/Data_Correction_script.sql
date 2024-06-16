Error 405: Supplier With In state and Tax Strucutre With In State Does Not Matched, Please select another tax Strucutre

select * from supplier where lower(with_in_state) = 'yes'; --> 60
select * from supplier where lower(with_in_state) = 'no';  --> 4


update supplier SET with_in_state = 'yes' WHERE lower(with_in_state) = 'yes'
update supplier SET with_in_state = 'no' WHERE lower(with_in_state) = 'no';
