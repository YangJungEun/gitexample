<?php

 $val_id="admin";
  $val_pw="nimda";
  for($i=0;$i<20;$i++){
    $val_id=base64_encode($val_id); // $val_id = Z3Vlc3Q= 
    $val_pw=base64_encode($val_pw); // $val_pw = MTIzcXdl
  }

  $val_id=str_replace("1","!",$val_id);
  $val_id=str_replace("2","@",$val_id);
  $val_id=str_replace("3","$",$val_id); // $val_id = Z$Vlc$Q=
  $val_id=str_replace("4","^",$val_id); 
  $val_id=str_replace("5","&",$val_id);
  $val_id=str_replace("6","*",$val_id);
  $val_id=str_replace("7","(",$val_id);
  $val_id=str_replace("8",")",$val_id);

  $val_pw=str_replace("1","!",$val_pw);
  $val_pw=str_replace("2","@",$val_pw);
  $val_pw=str_replace("3","$",$val_pw);
  $val_pw=str_replace("4","^",$val_pw);
  $val_pw=str_replace("5","&",$val_pw);
  $val_pw=str_replace("6","*",$val_pw);
  $val_pw=str_replace("7","(",$val_pw);
  $val_pw=str_replace("8",")",$val_pw);

  echo $val_pw;

  //user : Vm0wd@QyUXlVWGxWV0d^V!YwZDRWMVl$WkRSV0!WbDNXa!JTVjAxV@JETlhhMUpUVmpBeFYySkVUbGhoTVVwVVZtcEJlRll&U@tWVWJHaG9UVlZ$VlZadGNFSmxSbGw!VTJ0V!ZXSkhhRzlVVmxaM!ZsWmFjVkZ0UmxSTmJFcEpWbTEwYTFkSFNrZGpSVGxhVmpOU!IxcFZXbUZrUjA!R!UyMTRVMkpIZHpGV!ZFb$dWakZhV0ZOcmFHaFNlbXhXVm!wT!QwMHhjRlpYYlVaclVqQTFSMXBGV@xOVWJGcFlaSHBHVjFaRmIzZFdha!poVjBaT@NtRkhhRk&sYlhoWFZtMHhORmxWTUhoWGJrNVlZbFZhY@xWcVFURlNNVlY!VFZSU!ZrMXJjRWxhU0hCSFZqRmFSbUl*WkZkaGExcG9WakJhVDJOdFJraGhSazVzWWxob!dGWnRNWGRVTVZGM!RVaG9hbEpzY0ZsWmJGWmhZMnhXY!ZGVVJsTk&WbFkxVkZaU!UxWnJNWEpqUld^aFUwaENTRlpxUm!GU@JVbDZXa!prYUdFeGNHOVdha0poVkRKT@RGSnJhR@hTYXpWeldXeG9iMWRHV@&STldHUlZUVlpHTTFSVmFHOWhiRXB*WTBac!dtSkdXbWhaTVZwaFpFZFNTRkpyTlZOaVJtOTNWMnhXYjJFeFdYZE&WVlpUWVRGd!YxbHJXa$RUUmxweFVtMUdVMkpWYkRaWGExcHJZVWRGZUdOSE9WZGhhMHBvVmtSS!QyUkdTbkpoUjJoVFlYcFdlbGRYZUc&aU!XUkhWMjVTVGxOSGFGQlZiVEUwVmpGU!ZtRkhPVmhTTUhCNVZHeGFjMWR0U@tkWGJXaGFUVzVvV0ZreFdrZFdWa$B*VkdzMVYwMVZiekZXYlhCS!RWZEZlRmRZWkU!V!ZscFVXV$RrVTFsV!VsWlhiVVpPVFZad@VGVXlkREJXTVZweVkwWndXR0V^Y0ROV@FrWkxWakpPU!dKR!pGZFNWWEJ@Vm!0U!MxUXlUWGxVYTFwb!VqTkNWRmxZY0ZkWFZscFlZMFU!YVUxcmJEUldNalZUVkd^a!NGVnNXbFZXYkhCWVZHdGFWbVZIUmtoUFYyaHBVbGhDTmxkVVFtRmpNV!IwVTJ0a!dHSlhhR0ZVVnpWdlYwWnJlRmRyWkZkV@EzQjZWa@R*TVZkR!NsWmpSV$hYWWxoQ!RGUnJXbEpsUm!SellVWlNhRTFzU@&oV!Z*QjRUa@RHUjFaWVpHaFNWVFZWVlcxNGQyVkdWblJOVldSV!RXdHdWMWxyVW!GWFIwVjRZMGhLV@xaWFVrZGFWV!JQVTBVNVYxcEhhR@hOU0VKMlZtMTBVMU!^VVhsVmEyUlZZbXR$YUZWdGVFdGpSbHB^VkcwNVYxWnNjRWhYVkU!dllWVXhXRlZ!Y0ZkTlYyaDJWMVphUzFJeFRuVlJiRlpYVFRGS0&sWkdVa@RWTVZwMFVtdG9VRlp0YUZSVVZXaERVMnhhYzFwRVVtcE&WMUl$VlRKMGExZEhTbGhoUjBaVlZucFdkbFl$V@&KbFJtUnlXa!prVjJFelFqWldhMlI@VFZaWmVWTnJaR@hOTW!oWVdWUkdkMkZHV@xWU@JGcHNVbTFTTVZVeWN*RlhSa$BaVVc!b!YxWXphSEpVYTJSSFVqRmFXVnBIYUZOV!ZGWldWbGN^TkdReVZrZFdXR$hyVWpCYWNGVnRlSGRsYkZsNVpVaGtXRkl$VmpSWk!GSlBWMjFGZVZWclpHRldNMmhJV!RJeFMxSXhjRWhpUm!oVFZsaENTMVp0TVRCVk!VMTRWbGhvV0ZkSGFGbFpiWGhoVm!^c@NscEhPV$BTYkhCNFZrY$dOVll^V@&OalJXaFlWa!UxZGxsV!ZYaFhSbFp&WVVaa!RtRnNXbFZXYTJRMFdWWktjMVJ!VG!oU@JGcFlXV$hhUm!ReFduRlJiVVphVm0xU!NWWlhkRzloTVVwMFlVWlNWVlpXY0dGVVZscGhZekZ$UlZWdGNFNVdNVWwzVmxSS0!HRXhaRWhUYkdob!VqQmFWbFp0ZUhkTk!WcHlWMjFHYWxacmNEQmFSV!F$VmpKS@NsTnJhRmRTTTJob!ZrUktSMVl^VG&WVmJFSlhVbFJXV!ZaR!l*RmlNV!JIWWtaV!VsZEhhRlJVVm!SVFpXeHNWbGRzVG!oU!ZFWjZWVEkxYjFZeFdYcFZiR@hZVm!^d!lWcFZXbXRrVmtwelZtMXNWMUl*YURWV0!XUXdXVmRSZVZaclpGZGliRXB&Vld0V!MySXhiRmxqUldSc!ZteEtlbFp0TURWWFIwcEhZMFpvV@sxSGFFeFdNbmhoVjBaV@NscEhSbGROTW!oSlYxUkplRk!^U!hoalJXUmhVbXMxV0ZZd!ZrdE&iRnAwWTBWa!dsWXdWalJXYkdodlYwWmtTR0ZHV@xwaVdHaG9WbTE0YzJOc!pISmtSM0JUWWtad0&GWlhNVEJOUmxsNFYyNU9hbEpYYUZoV@FrNVRWRVpzVlZGWWFGTldhM0I@VmtkNFlWVXlTa!pYV0hCWFZsWndSMVF^V@tOVmJFSlZUVVF$UFE9PQ==



?>
//sample
