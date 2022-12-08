const randomPasswd = len => {
    let passwd = ''
    do{
        passwd += Math.random(). toString(36). substring(2)
    }while(passwd.length < len)
    passwd = passwd.substring(0, len)
    return passwd
}
console.log(randomPasswd(10))