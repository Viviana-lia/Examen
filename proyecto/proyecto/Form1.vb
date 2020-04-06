Public Class Form1

    Private Sub MEDIAARITMETICAToolStripMenuItem_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MEDIAARITMETICAToolStripMenuItem.Click
        Form2.Show()
        Me.Hide()


    End Sub

    Private Sub SALIRToolStripMenuItem_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles SALIRToolStripMenuItem.Click
        End
    End Sub


    Private Sub TextBox1_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs)

    End Sub

    Private Sub Label1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Label1.Click

    End Sub

    Private Sub Label4_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Label4.Click

    End Sub

    Private Sub TextBox1_TextChanged_1(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TextBox1.TextChanged


    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        TextBox1.Text = Val(TextBox9.Text) + Val(TextBox10.Text) + Val(TextBox11.Text) + Val(TextBox12.Text)
        TextBox13.Text = Val(TextBox3.Text) * Val(TextBox8.Text)
        TextBox14.Text = Val(TextBox4.Text) * Val(TextBox9.Text)
        TextBox15.Text = Val(TextBox5.Text) * Val(TextBox10.Text)
        TextBox16.Text = Val(TextBox6.Text) * Val(TextBox11.Text)
        TextBox17.Text = Val(TextBox7.Text) * Val(TextBox12.Text)
        TextBox18.Text = Val(TextBox2.Text) / Val(TextBox1.Text)
    End Sub
End Class
