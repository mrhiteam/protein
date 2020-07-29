function check_input()
{
    if (!document.login_form.id.value)
    {
        alert("아이디를 입력하세요");    
        document.login_form.id.focus();
        return;
    }

    if (!document.login_form.pass.value)
    {
        alert("비밀번호를 입력하세요");    
        document.login_form.pass.focus();
        return;
    }
    document.login_form.submit();
}
function mcheck_input()
{
    if (!document.m_login_form.id.value)
    {
        alert("아이디를 입력하세요");    
        document.m_login_form.id.focus();
        return;
    }

    if (!document.m_login_form.pass.value)
    {
        alert("비밀번호를 입력하세요");    
        document.m_login_form.pass.focus();
        return;
    }
    document.m_login_form.submit();
}