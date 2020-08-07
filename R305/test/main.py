# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'main.ui'
#
# Created by: PyQt5 UI code generator 5.14.1
#
# WARNING! All changes made in this file will be lost!


from PyQt5 import QtCore, QtGui, QtWidgets
from Finger import Finger


class Ui_MainWindow(object):
    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.resize(584, 427)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.btnregister = QtWidgets.QPushButton(self.centralwidget)
        self.btnregister.setGeometry(QtCore.QRect(110, 260, 161, 91))
        self.btnregister.setObjectName("btnregister")
        self.btnlogin = QtWidgets.QPushButton(self.centralwidget)
        self.btnlogin.setGeometry(QtCore.QRect(310, 260, 161, 91))
        self.btnlogin.setObjectName("btnlogin")
        self.labelscreen = QtWidgets.QLabel(self.centralwidget)
        self.labelscreen.setGeometry(QtCore.QRect(110, 109, 361, 91))
        font = QtGui.QFont()
        font.setPointSize(18)
        font.setBold(True)
        font.setWeight(75)
        self.labelscreen.setFont(font)
        self.labelscreen.setObjectName("labelscreen")
        self.dateTimeEdit = QtWidgets.QDateTimeEdit(self.centralwidget)
        self.dateTimeEdit.setGeometry(QtCore.QRect(280, 210, 194, 26))
        self.dateTimeEdit.setObjectName("dateTimeEdit")
        self.label = QtWidgets.QLabel(self.centralwidget)
        self.label.setGeometry(QtCore.QRect(110, 210, 101, 21))
        font = QtGui.QFont()
        font.setBold(True)
        font.setWeight(75)
        self.label.setFont(font)
        self.label.setObjectName("label")
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 584, 24))
        self.menubar.setObjectName("menubar")
        self.menuINTELLIPRO = QtWidgets.QMenu(self.menubar)
        self.menuINTELLIPRO.setObjectName("menuINTELLIPRO")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)
        self.actionAdd_FingerPrint = QtWidgets.QAction(MainWindow)
        self.actionAdd_FingerPrint.setObjectName("actionAdd_FingerPrint")
        self.menuINTELLIPRO.addAction(self.actionAdd_FingerPrint)
        self.menubar.addAction(self.menuINTELLIPRO.menuAction())

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "MainWindow"))
        self.btnregister.setText(_translate("MainWindow", "REGISTER"))
        self.btnlogin.setText(_translate("MainWindow", "LOGIN"))
        self.labelscreen.setText(_translate("MainWindow", "SCAN FINGERPRINT TO LOGIN"))
        self.label.setText(_translate("MainWindow", "Date and time"))
        self.menuINTELLIPRO.setTitle(_translate("MainWindow", "INTELLIPRO"))
        self.actionAdd_FingerPrint.setText(_translate("MainWindow", "Add FingerPrint"))
        self.btnregister.clicked.connect(self.register)

    def register(self):
        from PyQt5.QtCore import pyqtRemoveInputHook
        pyqtRemoveInputHook()
        f=Finger("/dev/ttyUSB0" ,57600,'harare','posid',100)
        f.enroll()


if __name__ == "__main__":
    import sys
    app = QtWidgets.QApplication(sys.argv)
    MainWindow = QtWidgets.QMainWindow()
    ui = Ui_MainWindow()
    ui.setupUi(MainWindow)
    MainWindow.show()
    sys.exit(app.exec_())
